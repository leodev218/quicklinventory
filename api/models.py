from django.db import models

class Role(models.Model):
    role_name = models.TextField()
    salary = models.DecimalField(max_digits=10, decimal_places=2, null=True)

    def __str__(self):
        return self.role_name

class Employee(models.Model):
    employee_name = models.TextField()
    document = models.IntegerField(unique=True, null=True)
    role = models.ForeignKey(Role, on_delete=models.SET_NULL, null=True)
    email = models.EmailField(unique=True)
    phone = models.CharField(max_length=15)

    def __str__(self):
        return self.employee_name

class Status(models.Model):
    status_name = models.TextField()

    def __str__(self):
        return self.status_name

class Supplier(models.Model):
    supplier_name = models.TextField()
    contact = models.TextField(null=True, blank=True)
    email = models.EmailField(unique=True)
    phone = models.CharField(max_length=15)

    def __str__(self):
        return self.supplier_name

class Customer(models.Model):
    customer_name = models.TextField()
    email = models.EmailField(unique=True)

    def __str__(self):
        return self.customer_name

class Category(models.Model):
    category_name = models.TextField()

    def __str__(self):
        return self.category_name

class Product(models.Model):
    product_name = models.TextField()
    brand = models.TextField(null=True, blank=True)
    price = models.DecimalField(max_digits=10, decimal_places=2)
    description = models.TextField(null=True, blank=True)
    stock = models.IntegerField()
    category = models.ForeignKey(Category, on_delete=models.CASCADE, null=True, blank=True)

    def __str__(self):
        return self.product_name

class OrderCustomer(models.Model):
    customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
    employee = models.ForeignKey(Employee, on_delete=models.CASCADE)
    order_date = models.DateTimeField(auto_now_add=True)
    status = models.ForeignKey(Status, on_delete=models.CASCADE)

    def __str__(self):
        return f"Order {self.id} by {self.customer.customer_name}"

class OrderSupplier(models.Model):
    supplier = models.ForeignKey(Supplier, on_delete=models.CASCADE)
    employee = models.ForeignKey(Employee, on_delete=models.CASCADE)
    order_date = models.DateTimeField(auto_now_add=True)
    status = models.ForeignKey(Status, on_delete=models.CASCADE)

    def __str__(self):
        return f"Order {self.id} by {self.supplier.supplier_name}"

class PurchaseItem(models.Model):
    order_supplier = models.ForeignKey(OrderSupplier, on_delete=models.CASCADE, null=True, related_name='purchase_items')
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    quantity = models.IntegerField()
    item_total = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.item_total = self.quantity * self.product.price
        super().save(*args, **kwargs)

    def __str__(self):
        return f"{self.quantity} of {self.product.product_name} in Order {self.order_supplier.id}"

class SalesItem(models.Model):
    order_customer = models.ForeignKey(OrderCustomer, on_delete=models.CASCADE, related_name='sales_items')
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    quantity = models.IntegerField()
    item_total = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.item_total = self.quantity * self.product.price
        super().save(*args, **kwargs)
        
    def __str__(self):
        return f"{self.quantity} of {self.product.product_name} in Order {self.order_customer.id}"

class PurchaseInvoice(models.Model):
    order = models.ForeignKey(OrderSupplier, on_delete=models.CASCADE, null=True)
    invoice_date = models.DateTimeField(auto_now_add=True)
    total_amount = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.total_amount = sum(item.item_total for item in PurchaseItem.objects.filter(order_supplier=self.order))
        super().save(*args, **kwargs)
        self.adjust_stock_increase()

    def adjust_stock_increase(self):
        for item in self.order.purchase_items.all():
            item.product.stock += item.quantity
            item.product.save()

class SalesInvoice(models.Model):
    order = models.ForeignKey(OrderCustomer, on_delete=models.CASCADE)
    invoice_date = models.DateTimeField(auto_now_add=True)
    total_amount = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.total_amount = sum(item.item_total for item in SalesItem.objects.filter(order_customer=self.order))
        super().save(*args, **kwargs)
        self.adjust_stock_decrease()

    def adjust_stock_decrease(self):
        for item in self.order.sales_items.all():
            item.product.stock -= item.quantity
            item.product.save()
           
from django.db import models

class Role(models.Model):
    name = models.TextField()
    def __str__(self):
     return self.name

class Employee(models.Model):
    name = models.TextField()
    role = models.ForeignKey(Role, on_delete=models.SET_NULL, null=True)
    email = models.EmailField(unique=True)
    phone = models.CharField(max_length=15)
    def __str__(self):
        return self.name

class Status(models.Model):
    name = models.TextField()
    def __str__(self):
        return self.name

class Supplier(models.Model):
    name = models.TextField()
    contact_name = models.TextField(null=True, blank=True)
    email = models.EmailField(unique=True)
    phone = models.CharField(max_length=15)

class Customer(models.Model):
    name = models.TextField()
    email = models.EmailField(unique=True)
    def __str__(self):
        return self.name

class Category(models.Model):
    name = models.TextField()
    def __str__(self):
        return self.name

class Product(models.Model):
    name = models.TextField()
    brand = models.TextField(null=True, blank=True)
    price = models.DecimalField(max_digits=10, decimal_places=2)
    description = models.TextField(null=True, blank=True)
    stock = models.IntegerField()
    category = models.ForeignKey(Category, on_delete=models.CASCADE, null=True, blank=True)
    def __str__(self):
        return self.name

class Order(models.Model):
    customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
    employee = models.ForeignKey(Employee, on_delete=models.CASCADE)
    order_date = models.DateTimeField(auto_now_add=True)
    status = models.ForeignKey(Status, on_delete=models.CASCADE)
    def __str__(self):
        return f"Order {self.id} by {self.customer.name}"

class OrderItem(models.Model):
    order = models.ForeignKey(Order, on_delete=models.CASCADE)
    product = models.ForeignKey(Product, on_delete=models.CASCADE)
    quantity = models.IntegerField()
    item_total = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.item_total = self.quantity * self.product.price
        super().save(*args, **kwargs)

class Invoice(models.Model):
    order = models.ForeignKey(Order, on_delete=models.CASCADE)
    invoice_date = models.DateTimeField(auto_now_add=True)
    total_amount = models.DecimalField(max_digits=10, decimal_places=2, editable=False)

    def save(self, *args, **kwargs):
        self.total_amount = sum(item.item_total for item in self.order.orderitem_set.all())
        super().save(*args, **kwargs)
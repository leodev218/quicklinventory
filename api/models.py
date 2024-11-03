from django.db import models

# Create your models here.
class Role(models.Model):

    name = models.TextField(unique=True,max_length=50)
    
    description = models.TextField(null=True,max_length=200)


    def __str__(self):

        return self.name


class Status(models.Model):

    name = models.TextField(unique=True)


    def __str__(self):

        return self.name


class Supplier(models.Model):

    name = models.CharField(max_length=255)

    contact_name = models.CharField(max_length=255, blank=True, null=True)

    email = models.EmailField(unique=True)

    phone = models.CharField(max_length=20, blank=True, null=True)


    def __str__(self):

        return self.name


class Category(models.Model):

    name = models.CharField(max_length=255, unique=True)


    def __str__(self):

        return self.name


class Product(models.Model):

    name = models.CharField(max_length=255)

    price = models.DecimalField(max_digits=10, decimal_places=2)

    stock = models.IntegerField(default=0)

    category = models.ForeignKey(Category, on_delete=models.CASCADE)

    supplier = models.ForeignKey(Supplier, on_delete=models.CASCADE, null=True, blank=True)


    def __str__(self):

        return self.name


class Customer(models.Model):

    name = models.TextField()

    email = models.EmailField(unique=True)

    phone = models.TextField(null=True, blank=True)


    def __str__(self):

        return self.name


class Supplier(models.Model):

    name = models.TextField()

    contact_name = models.TextField(null=True, blank=True)

    email = models.EmailField(unique=True)

    phone = models.TextField(null=True, blank=True)


    def __str__(self):

        return self.name


class Order(models.Model):

    customer = models.ForeignKey(Customer, on_delete=models.CASCADE)

    order_date = models.DateTimeField(auto_now_add=True)


    def __str__(self):

        return f"Order {self.id} by {self.customer.name}"


class Invoice(models.Model):

    order = models.ForeignKey(Order, on_delete=models.CASCADE)

    invoice_date = models.DateTimeField(auto_now_add=True)

    total = models.DecimalField(max_digits=10, decimal_places=2)


    def __str__(self):

        return f"Invoice {self.id} for Order {self.order.id}"


class OrderItem(models.Model):

    order = models.ForeignKey(Order, on_delete=models.CASCADE)

    product = models.ForeignKey(Product, on_delete=models.CASCADE)

    quantity = models.IntegerField()

    price = models.DecimalField(max_digits=10, decimal_places=2)


    def __str__(self):

        return f"{self.quantity} of {self.product.name} in Order {self.order.id}"
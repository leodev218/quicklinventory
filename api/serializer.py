from rest_framework import serializers

from .models import Role, Status, Employee, Category, Product, Customer, Supplier, Order, Invoice, OrderItem


class RoleSerializer(serializers.ModelSerializer):

    class Meta:

        model = Role

        fields = ['id', 'name','description']


class StatusSerializer(serializers.ModelSerializer):

    class Meta:

        model = Status

        fields = ['id', 'name']


class EmployeeSerializer(serializers.ModelSerializer):

    class Meta:

        model = Employee

        fields = ['id', 'name', 'email', 'phone', 'role', 'status']


class CategorySerializer(serializers.ModelSerializer):

    class Meta:

        model = Category

        fields = ['id', 'name']


class ProductSerializer(serializers.ModelSerializer):

    class Meta:

        model = Product

        fields = ['id', 'name', 'price','description', 'category', 'stock']


class CustomerSerializer(serializers.ModelSerializer):

    class Meta:

        model = Customer

        fields = ['id', 'name', 'email', 'phone']


class SupplierSerializer(serializers.ModelSerializer):

    class Meta:

        model = Supplier

        fields = ['id', 'name', 'contact_name', 'email', 'phone']


class OrderSerializer(serializers.ModelSerializer):

    class Meta:

        model = Order

        fields = ['id', 'customer', 'order_date']


class InvoiceSerializer(serializers.ModelSerializer):

    class Meta:

        model = Invoice

        fields = ['id', 'order', 'invoice_date', 'total']


class OrderItemSerializer(serializers.ModelSerializer):

    class Meta:

        model = OrderItem

        fields = ['id', 'order', 'product', 'quantity', 'price']
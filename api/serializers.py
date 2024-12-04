from rest_framework import serializers
from .models import Role, Employee, Status, Supplier, Customer, Category, Product, PurchaseItem, SalesItem,PurchaseInvoice, SalesInvoice, OrderSupplier, OrderCustomer

class RoleSerializer(serializers.ModelSerializer):
    class Meta:
        model = Role
        fields = '__all__'

class EmployeeSerializer(serializers.ModelSerializer):
    class Meta:
        model = Employee
        fields = '__all__'

class StatusSerializer(serializers.ModelSerializer):
    class Meta:
        model = Status
        fields = '__all__'

class SupplierSerializer(serializers.ModelSerializer):
    class Meta:
        model = Supplier
        fields = '__all__'

class CustomerSerializer(serializers.ModelSerializer):
    class Meta:
        model = Customer
        fields = '__all__'

class CategorySerializer(serializers.ModelSerializer):
    class Meta:
        model = Category
        fields = '__all__'

class ProductSerializer(serializers.ModelSerializer):
    class Meta:
        model = Product
        fields = '__all__'


class PurchaseItemSerializer(serializers.ModelSerializer):
    class Meta:
        model = PurchaseItem
        fields = '__all__'
        
class SalesItemSerializer(serializers.ModelSerializer):
    class Meta:
        model = SalesItem
        fields = '__all__'

class PurchaseInvoiceSerializer(serializers.ModelSerializer):
    class Meta:
        model = PurchaseInvoice
        fields = '__all__'

    def validate(self, data):
        order = data.get('order')
        if order:
            for item in order.purchase_items.all():
                product = item.product
                if product.stock > item.quantity:
                    raise serializers.ValidationError(f"No hay suficiente stock para el producto {product.product_name}. Stock disponible: {product.stock}.")
        return data
    
class SalesInvoiceSerializer(serializers.ModelSerializer):
    class Meta:
        model = SalesInvoice
        fields = '__all__'

    def validate(self, data):
        order = data.get('order')
        if order:
            for item in order.sales_items.all():
                product = item.product
                if product.stock < item.quantity:
                    raise serializers.ValidationError(f"No hay suficiente stock para el producto {product.product_name}. Stock disponible: {product.stock}.")
        return data
    
class OrderSupplierSerializer(serializers.ModelSerializer):
    class Meta:
        model = OrderSupplier
        fields = '__all__'

class OrderCustomerSerializer(serializers.ModelSerializer):
    class Meta:
        model = OrderCustomer
        fields = '__all__'

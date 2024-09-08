from django.shortcuts import render
from rest_framework import viewsets

from .models import Role, Status, Employee, Category, Product, Customer, Supplier, Order, Invoice, OrderItem

from .serializer import RoleSerializer, StatusSerializer, EmployeeSerializer, CategorySerializer, ProductSerializer, CustomerSerializer, SupplierSerializer, OrderSerializer, InvoiceSerializer, OrderItemSerializer


class RoleViewSet(viewsets.ModelViewSet):

    queryset = Role.objects.all()

    serializer_class = RoleSerializer


class StatusViewSet(viewsets.ModelViewSet):

    queryset = Status.objects.all()

    serializer_class = StatusSerializer


class EmployeeViewSet(viewsets.ModelViewSet):

    queryset = Employee.objects.all()

    serializer_class = EmployeeSerializer


class CategoryViewSet(viewsets.ModelViewSet):

    queryset = Category.objects.all()

    serializer_class = CategorySerializer


class ProductViewSet(viewsets.ModelViewSet):

    queryset = Product.objects.all()

    serializer_class = ProductSerializer


class CustomerViewSet(viewsets.ModelViewSet):

    queryset = Customer.objects.all()

    serializer_class = CustomerSerializer


class SupplierViewSet(viewsets.ModelViewSet):

    queryset = Supplier.objects.all()

    serializer_class = SupplierSerializer


class OrderViewSet(viewsets.ModelViewSet):

    queryset = Order.objects.all()

    serializer_class = OrderSerializer


class InvoiceViewSet(viewsets.ModelViewSet):

    queryset = Invoice.objects.all()

    serializer_class = InvoiceSerializer


class OrderItemViewSet(viewsets.ModelViewSet):

    queryset = OrderItem.objects.all()

    serializer_class = OrderItemSerializer
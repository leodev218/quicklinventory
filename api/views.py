from rest_framework import viewsets
from rest_framework import status
from rest_framework.response import Response
from rest_framework.views import APIView
from .models import Role, Employee, Status, Supplier, Customer, Category, Product, OrderSupplier, OrderCustomer, PurchaseItem, SalesItem, PurchaseInvoice, SalesInvoice
from .serializers import RoleSerializer, EmployeeSerializer, StatusSerializer, SupplierSerializer, CustomerSerializer, CategorySerializer, ProductSerializer, OrderSupplierSerializer, OrderCustomerSerializer,PurchaseItemSerializer, SalesItemSerializer,PurchaseInvoiceSerializer, SalesInvoiceSerializer

class RoleViewSet(viewsets.ModelViewSet):
    queryset = Role.objects.all()
    serializer_class = RoleSerializer

class EmployeeViewSet(viewsets.ModelViewSet):
    queryset = Employee.objects.all()
    serializer_class = EmployeeSerializer

class StatusViewSet(viewsets.ModelViewSet):
    queryset = Status.objects.all()
    serializer_class = StatusSerializer

class SupplierViewSet(viewsets.ModelViewSet):
    queryset = Supplier.objects.all()
    serializer_class = SupplierSerializer

class CustomerViewSet(viewsets.ModelViewSet):
    queryset = Customer.objects.all()
    serializer_class = CustomerSerializer

class CategoryViewSet(viewsets.ModelViewSet):
    queryset = Category.objects.all()
    serializer_class = CategorySerializer

class ProductViewSet(viewsets.ModelViewSet):
    queryset = Product.objects.all()
    serializer_class = ProductSerializer

class OrderSupplierViewSet(viewsets.ModelViewSet):
    queryset = OrderSupplier.objects.all()
    serializer_class = OrderSupplierSerializer
    
class OrderCustomerViewSet(viewsets.ModelViewSet):
    queryset = OrderCustomer.objects.all()
    serializer_class = OrderCustomerSerializer

class PurchaseItemViewSet(viewsets.ModelViewSet):
    queryset = PurchaseItem.objects.all()
    serializer_class = PurchaseItemSerializer

class SalesItemViewSet(viewsets.ModelViewSet):
    queryset = SalesItem.objects.all()
    serializer_class = SalesItemSerializer
        
class PurchaseInvoiceViewSet(viewsets.ModelViewSet):
    queryset = PurchaseInvoice.objects.all()
    serializer_class = PurchaseInvoiceSerializer

class SalesInvoiceViewSet(viewsets.ModelViewSet):
    queryset = SalesInvoice.objects.all()
    serializer_class = SalesInvoiceSerializer
  
#Vista personalizada    
class EmployeeRoleView(APIView):
    def get(self, request):
        employees = Employee.objects.select_related('role').values('id', 'employee_name', 'role__role_name', 'role__salary','email', 'phone')
        return Response(employees)
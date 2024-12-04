from django.urls import path, include
from rest_framework.documentation import include_docs_urls
from rest_framework.routers import DefaultRouter

from .views import RoleViewSet, EmployeeViewSet, StatusViewSet, SupplierViewSet, CustomerViewSet, CategoryViewSet, ProductViewSet,PurchaseItemViewSet, SalesItemViewSet, EmployeeRoleView, OrderCustomerViewSet, OrderSupplierViewSet, PurchaseInvoiceViewSet, SalesInvoiceViewSet

# Crea un router y registra nuestros viewsets con él

router = DefaultRouter()

router.register(r'roles', RoleViewSet)

router.register(r'statuses', StatusViewSet)

router.register(r'employees', EmployeeViewSet)

router.register(r'categories', CategoryViewSet)

router.register(r'products', ProductViewSet)

router.register(r'customers', CustomerViewSet)

router.register(r'suppliers', SupplierViewSet)

router.register(r'orders-supplier', OrderSupplierViewSet)

router.register(r'orders-customer', OrderCustomerViewSet)

router.register(r'purchase-invoices', PurchaseInvoiceViewSet)

router.register(r'sales-invoices', SalesInvoiceViewSet)

router.register(r'purchase-items', PurchaseItemViewSet)

router.register(r'sales-items', SalesItemViewSet)

# Las URLs de la API ahora están determinadas automáticamente por el router.

urlpatterns = [

    path('v1/', include(router.urls)),
    path('v1.1/employees/roles/', EmployeeRoleView.as_view()),
    path('docs/', include_docs_urls(title="Quick Invetory Api"))

]
from django.contrib import admin
from .models import Role,  Status, Employee, Product


# Register your models here.
admin.site.register(Role)
admin.site.register(Status)
admin.site.register(Employee)
admin.site.register(Product)


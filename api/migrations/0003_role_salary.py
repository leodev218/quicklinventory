# Generated by Django 5.1.1 on 2024-11-26 05:49

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0002_alter_employee_role'),
    ]

    operations = [
        migrations.AddField(
            model_name='role',
            name='salary',
            field=models.TextField(blank=True, null=True),
        ),
    ]

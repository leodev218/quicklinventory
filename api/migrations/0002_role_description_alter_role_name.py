# Generated by Django 5.1 on 2024-09-02 05:46

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='role',
            name='description',
            field=models.TextField(max_length=200, null=True),
        ),
        migrations.AlterField(
            model_name='role',
            name='name',
            field=models.TextField(max_length=50, unique=True),
        ),
    ]

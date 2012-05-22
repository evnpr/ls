from django.db import models
from django.contrib import admin

# Create your models here.
class Menu(models.Model):
    home = models.CharField(max_length=200)
    menu1 = models.CharField(max_length=200)
    menu2 = models.CharField(max_length=200)
    menu3 = models.CharField(max_length=200)
    menu4 = models.CharField(max_length=200)
    
    

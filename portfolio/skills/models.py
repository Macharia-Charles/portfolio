"""
@ author Charles Macharia Kariuki
"""
from django.db import models


# Create your models here.
class Work(models.Model):
    name_workplace = models.CharField(max_length=35, null=False)
    location = models.CharField(max_length=35, null=False)
    position = models.CharField(max_length=55, null=False)
    start_time = models.DateField()
    finish_time = models.DateField()


class Education(models.Model):
    name_school = models.CharField(max_length=75, blank=False)
    location = models.CharField(max_length=55)
    start_year = models.DateField()
    finish_year = models.DateField()


class Skills(models.Model):
    skill = models.CharField(max_length=50, null=False)
    Description = models.TextField(max_length=350)

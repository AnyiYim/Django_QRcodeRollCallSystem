import datetime
from django.db import models
import mongoengine


# Create your models here.
class Student(mongoengine.Document):
    num = mongoengine.StringField(max_length=16)
    classname = mongoengine.StringField(max_length=16)
    coursename = mongoengine.StringField(max_length=16)
    name = mongoengine.StringField(max_length=8)
    time = mongoengine.DateTimeField(default=datetime.datetime.now)
    lat = mongoengine.FloatField()
    lng = mongoengine.FloatField()
    call = mongoengine.BooleanField()



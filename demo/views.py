from django.http import HttpResponse
from django.shortcuts import render
# Create your views here.
from demo.models import Student


def testdb(request):
    Student.objects.create(
        num='1505281',
        name='anyi',
        lat=24.52065,
        lng=-24.52065,
        call=True,
        coursename='django',
        classname='cs',
    )
    response = ""
    response1 = ""
    res = Student.objects.all()
    for var in res:
        response1 += var.name + " "
    response = response1
    return HttpResponse("<p>" + response + "</p>")
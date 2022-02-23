"""
@ author Charles Macharia Kariuki
"""

from django.contrib import admin
from .models import Skills, Work, Education


# Register your models here.

class SkillsAdmin(admin.ModelAdmin):
    list_display = ['skill']


class WorkAdmin(admin.ModelAdmin):
    list_display = ('name_workplace', 'location')


class EducationAdmin(admin.ModelAdmin):
    list_display = ('name_school', 'location')


admin.site.register(Skills, SkillsAdmin)
admin.site.register(Work, WorkAdmin)
admin.site.register(Education, EducationAdmin)

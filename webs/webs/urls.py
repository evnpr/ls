from django.conf.urls import patterns, include, url

# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'webs.views.home', name='home'),
    # url(r'^webs/', include('webs.foo.urls')),
    url(r'^$', 'webs.views.home'),
    url(r'^page/', 'webs.views.page'),
    #url(r'^gallery/', 'webs.views.gallery'),
    url(r'^administrator/', 'administrator.views.index'),
    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),
    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
)

import web
from web.contrib.template import render_jinja
from models import database

def db():
    db = database.database()
    return db

def render():
    render = render_jinja(
                  'templates/ginstitute/',                 # Set template directory.
                   encoding = 'utf-8',         # Encoding.
                           )
    return render



import web
import os, sys
lib_path = os.path.abspath('../')
sys.path.append(lib_path)

from models import database, profile
from settings import db, render

db = db()
render = render()

class hello:
  def GET(self):
    password = db.query("SELECT * FROM profile")[0]
    halo = profile.getUser()
    return render.index(halo=halo, password = password)

class page:
  def GET(self):
    return render.page()




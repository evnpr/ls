import web
from hello import *

urls = (
            '/', 'hello'
                    )



app = web.application(urls, globals())

if __name__ == "__main__":
  app.run()

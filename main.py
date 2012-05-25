import web
from controllers.hello import *

urls = (
            '/', 'hello',
	    '/page/', 'page',
                    )



app = web.application(urls, globals())

if __name__ == "__main__":
  app.run()

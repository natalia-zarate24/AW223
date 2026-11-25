from flask import Flask
from controllers.controladorAlumno import controladorAlumnoBP

def createApp():
    app=Flask(__name__) 
    app.register_blueprint(controladorAlumnoBP)
    return app


if __name__ == '__main__' :
    app = createApp()
    app.run(port = 5000, debug = True)
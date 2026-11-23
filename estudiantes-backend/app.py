from flask import Flask

app=Flask(__name__) 

@app.route('/')
def inicio():
    return "Hello Flask World"

@app.route('/soyotraruta', method=['POST'])
def otra():
    return "Hola Mundo Flask"

if __name__ == '__main__' :
    app.run(debug=True)
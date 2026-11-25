from flask import Blueprint

controladorAlumnoBP = Blueprint('controladorAlumno',__name__)

# ruta de arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return "Hello Flask World, I'm the student's backend"

# ruta para insert
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    return 'Se guardo el alumno'

# ruta para consultar todo
@controladorAlumnoBP.route('/consultaTodo')
def consultaTodo():
    return 'Se consulto todo'

# ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    return 'Se actualizo el alumno'

# ruta para eliminar
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar():
    return 'Se elimino el alumno'
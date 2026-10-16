import os
import sys
import webview

def get_resource_path(relative_path):
    try:
        base_path = sys._MEIPASS
    except Exception:
        base_path = os.path.dirname(os.path.abspath(__file__))
    return os.path.join(base_path, relative_path)

def get_data_file_path():
    if getattr(sys, 'frozen', False):
        base_dir = os.path.dirname(sys.executable)
    else:
        base_dir = os.path.dirname(os.path.abspath(__file__))
    return os.path.join(base_dir, 'datos_entrenamiento.json')

class Api:
    def guardar_datos(self, data_json):
        file_path = get_data_file_path()
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(data_json)
        return "Guardado exitoso"

    def cargar_datos(self):
        file_path = get_data_file_path()
        if os.path.exists(file_path):
            with open(file_path, 'r', encoding='utf-8') as f:
                return f.read()
        return "[]"

if __name__ == '__main__':
    html_path = get_resource_path('Entrenamiento.html')
    api = Api()
    
    # Cargamos el HTML localmente de forma directa (sin servidor, 100% offline)
    webview.create_window(
        'Garou Tracker', 
        html_path, 
        width=1100, 
        height=800, 
        background_color='#0b0f19',
        js_api=api
    )
    
    webview.start()
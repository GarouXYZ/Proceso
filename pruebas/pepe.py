from microbit import *
import music

# Contraseña
clave = "ABAAB"
ingreso = ""

# Tiempo de la última pulsación
ultimo_tiempo = 0

cerrado = 25
abierto = 64

# Imagen de candado abierto
candado_abierto = Image(
    "00000:"
    "09090:"
    "90009:"
    "99999:"
    "99999"
)

# Posición inicial cerrado
pin0.set_analog_period(20)
pin0.write_analog(cerrado)   # Aproximadamente 0°

while True:

    # Si pasaron más de 2 segundos entre pulsaciones
    if len(ingreso) > 0 and running_time() - ultimo_tiempo > 2000:
        display.show(Image.NO)
        sleep(1000)
        ingreso = ""
        display.clear()

    # Botón A
    if button_a.was_pressed():
        if len(ingreso) < 5:
            ingreso += "A"
            ultimo_tiempo = running_time()
            display.show("A")
            sleep(150)
            display.clear()

    # Botón B
    if button_b.was_pressed():
        if len(ingreso) < 5:
            ingreso += "B"
            ultimo_tiempo = running_time()
            display.show("B")
            sleep(150)
            display.clear()

    # Verificar automáticamente al llegar a 5 caracteres
    if len(ingreso) == 5:

        if ingreso == clave:

            # Sonido de apertura
            music.play(["C5:1", "E5:1", "G5:2"])

            pin0.write_analog(abierto)

            # Mantener abierta hasta que se presione B
            while True:

                if button_b.was_pressed():

                    # Sonido de cierre
                    music.play(["G5:1", "E5:1", "C5:2"])

                    # Cerrar la tranca
                    pin0.write_analog(cerrado)
                    sleep(500)

                    break

                sleep(20)

        else:
            display.show(Image.NO)
            sleep(1000)

        ingreso = ""
        display.clear()
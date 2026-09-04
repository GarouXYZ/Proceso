import subprocess
import re

output = subprocess.check_output(
    ["netsh", "wlan", "show", "profiles"],
    text=True,
    encoding="utf-8",
    errors="ignore"
)

profiles = re.findall(
    r"(?:All User Profile|Perfil de todos los usuarios)\s*:\s*(.*)",
    output
)

for profile in profiles:
    profile = profile.strip()

    # Obtener los detalles del perfil
    details = subprocess.check_output(
        ["netsh", "wlan", "show", "profile", profile, "key=clear"],
        text=True,
        encoding="utf-8",
        errors="ignore"
    )

    password_match = re.search(
        r"(?:Key Content|Contenido de la clave)\s*:\s*(.*)",
        details
    )

    if password_match:
        password = password_match.group(1).strip()
    else:
        password = "No password"

    print(f"Wi-Fi: {profile}")
    print(f"Password: {password}")
    print("-" * 40)
# 🧾 Formulario de Registro con Validación en PHP

Este proyecto es un ejemplo práctico de cómo validar datos enviados desde un formulario HTML utilizando PHP.  
Incluye comprobaciones básicas para evitar campos vacíos, validar formatos y proteger la salida de datos.

---

## 🚀 Funcionalidad

El formulario permite al usuario ingresar:

- **Nombre de usuario**
- **Edad**
- **Correo electrónico**

Al enviar los datos, el archivo PHP (`validar.php`) realiza las siguientes validaciones:

1. **Campo vacío:**  
   Verifica que todos los campos estén completados.

2. **Validación del nombre de usuario:**  
   - Solo se permiten letras, números y guiones bajos.  
   - Usa una expresión regular:  
     php
     preg_match("/^[a-zA-Z0-9_]*$/", $user)
    

3. **Validación de edad:**  
   - Debe ser un número.  
   - Usa una expresión regular para comprobar que solo contenga dígitos:
     php
     preg_match("/^[0-9]*$/", $edad)
     

4. **Validación de email:**  
   - Debe tener un formato de correo válido.
   - Se usa la función nativa de PHP:
     php
     filter_var($email, FILTER_VALIDATE_EMAIL)
     

5. **Protección contra inyección de código (XSS):**  
   - Se emplea `htmlspecialchars()` al mostrar los datos.

---

## 🧩 Estructura del proyecto

📁 proyecto-validacion-php/
├── validar.php # Contiene la lógica PHP de validación
└── index.php # (Opcional) Formulario principal que envía los datos

---

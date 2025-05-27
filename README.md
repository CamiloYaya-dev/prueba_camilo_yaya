# 📄 Prueba Técnica Symfony - Time Manager

Este proyecto corresponde a una prueba técnica en Symfony. Se trata de un sistema sencillo de gestión de tareas, usuarios y proyectos, donde un usuario puede estar asociado a múltiples proyectos con tarifas diferentes, y registrar tareas en cada uno de ellos.

---

## 🌐 Tecnologías Utilizadas

- PHP 8.4
- Symfony 6.4
- MySQL / MariaDB
- Doctrine ORM
- Twig
- Bootstrap 5
- DataTables.js

---

## 📅 Estructura de la Solución

### 1. Modelo de Datos
- Entidades:
  - `User`
  - `Proyecto`
  - `UsuarioProyecto` (relación N:M + tarifa)
  - `Tarea`

### 2. API REST
- Ruta: `GET /api/tasks?user_id={id}`
- Devuelve las tareas del usuario, incluyendo información del proyecto y la tarifa correspondiente.

### 3. Vista Web
- Ruta: `GET /tareas?user_id={id}`
- Visualiza la información de tareas en una tabla interactiva.

---

## ⚙️ Instalación y Ejecución

### Paso 1: Clonar el repositorio
```bash
git clone <repo-url>
cd prueba-camilo-yaya
```

### Paso 2: Instalar dependencias
```bash
composer install
```

### Paso 3: Configurar archivo `.env`

Actualizar `DATABASE_URL` con tus credenciales. Ejemplo:
```env
DATABASE_URL="mysql://root:clave@127.0.0.1:3306/nombreDeSuBaseDeDatos?serverVersion=10.1.26-MariaDB"
```

### Paso 4: Crear y migrar la base de datos
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

### Paso 5: Importar datos de prueba
Ejecutar el script SQL `datos_prueba.sql` ubicado en la raíz del proyecto sql/prueba_camilo_yaya.sql:
```bash
mysql -u root -p nombreDeSuBaseDeDatos < prueba_camilo_yaya.sql o atravez de
```

### Paso 6: Iniciar servidor de desarrollo
```bash
symfony server:start
```

---

## 🌎 Accesos

- **API JSON:** http://localhost:8000/api/tasks?user_id=1
- **Vista Web:** http://localhost:8000/tareas?user_id=1

---

## 📃 Notas Adicionales

- El filtro por columna en la vista fue implementado con DataTables.
- Las combinaciones `usuario_id + proyecto_id + activo` en la tabla `usuario_proyecto` están validadas mediante índice único para evitar duplicados lógicos.
- La columna `tarifa` se resuelve dinámicamente según el usuario y el proyecto asociado a la tarea.
- Se utilizó eliminación lógica para preservar historial.

## 🙋 Autor

- Camilo Yaya – Prueba técnica para OpenAtlas S.A.S – 2025
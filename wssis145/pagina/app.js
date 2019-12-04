function mostrarPersonas() {
  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/get_personas',
    type: "GET",
    data: "",
    dataType: 'json',
    success: function(data) {
      $("#tabla_personas").empty();
      $("#tabla_personas").append('<tr> <th>CI</th> <th>Nombre</th> <th>Direccion</th> <th>Celular</th> <th>Correo</th> </tr>');
      for (let persona of Object.values(data)) {
        let html = `<tr>
                      <td>${persona.ci_nit}</td>
                      <td>${persona.nombre}</td>
                      <td>${persona.direccion}</td>
                      <td>${persona.telefono_celular}</td>
                      <td>${persona.email}</td>
                    </tr>`;
        $("#tabla_personas").append(html);
      }
    }
  });
}

function guardarPersona() {
  let ci = Number($("#ci")[0].value);
  let nombre = $("#nombre")[0].value;
  let direccion = $("#direccion")[0].value;
  let celular = Number($("#celular")[0].value);
  let email = $("#email")[0].value;

  let formData = new FormData();
  formData.append("ci_nit", ci);
  formData.append("nombre", nombre);
  formData.append("direccion", direccion);
  formData.append("telefono_celular", celular);
  formData.append("email", email);

  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/personas',
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function(data) {
      mostrarPersonas();
    },
    error: function() {
      alert('Error al guardar');
    }
  });
}
mostrarPersonas();


function mostrarClientes() {
  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/get_clientes',
    type: "GET",
    data: "",
    dataType: 'json',
    success: function(data) {
      $("#tabla_clientes").empty();
      $("#tabla_clientes").append('<tr> <th>Id Persona</th> <th>Fecha de registro</th></tr>');
      for (let cliente of Object.values(data)) {
        let html = `<tr>
                      <td>${cliente.id_persona}</td>
                      <td>${cliente.fecha_registro}</td>
                    </tr>`;
        $("#tabla_clientes").append(html);
      }
    }
  });
}

function guardarCliente() {
  let id_persona = Number($("#id_persona")[0].value);
  let fecha_registro =Date($("#fecha_registro")[0].value);

  let formData = new FormData();
  formData.append("id_persona", id_persona);
  formData.append("fecha_registro", fecha_registro);

  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/clientes',
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function(data) {
      mostrarClientes();
    },
    error: function() {
      alert('Error al guardar');
    }
  });
}
mostrarClientes();


function mostrarEmpleados() {
  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/get_empleados',
    type: "GET",
    data: "",
    dataType: 'json',
    success: function(data) {
      $("#tabla_empleados").empty();
      $("#tabla_empleados").append('<tr> <th>Id Persona</th> <th>Cargo</th></tr>');
      for (let empleado of Object.values(data)) {
        let html = `<tr>
                      <td>${empleado.id_persona}</td>
                      <td>${empleado.cargo}</td>
                    </tr>`;
        $("#tabla_empleados").append(html);
      }
    }
  });
}

function guardarEmpleado() {
  let id_persona = Number($("#id_persona")[0].value);
  let cargo =$("#cargo")[0].value;

  let formData = new FormData();
  formData.append("id_persona", id_persona);
  formData.append("cargo", cargo);

  $.ajax({
    url: 'http://localhost/wssis145/public/index.php/empleados',
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function(data) {
      mostrarEmpleados();
    },
    error: function() {
      alert('Error al guardar');
    }
  });
}
mostrarEmpleados();

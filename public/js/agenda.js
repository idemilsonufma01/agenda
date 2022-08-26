document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.querySelector("#formularioEvento");
    var calendarEl = document.getElementById("agenda");

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "pt-br",
        displayEventTime: false,

        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek",
        },

        //events: baseURL + "/evento/mostrar",

        eventSources: {
            url: baseURL + "/evento/mostrar",
            method: "POST",
            extraParams: {
                _token: formulario._token.value,
            },
        },

        dateClick: function (info) {
            formulario.reset();

            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show");
        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);
            axios
                .post(baseURL + "/evento/editar/" + info.event.id)
                .then((resposta) => {
                    formulario.id.value = resposta.data.id;
                    formulario.title.value = resposta.data.title;
                    formulario.descripcion.value = resposta.data.descripcion;
                    formulario.start.value = resposta.data.start;
                    formulario.end.value = resposta.data.end;
                    $("#evento").modal("show");
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        },
    });

    calendar.render();

    document.getElementById("btnSalvar").addEventListener("click", function () {
        enviarDados("/evento/adicionar");
    });
    document
        .getElementById("btnExcluir")
        .addEventListener("click", function () {
            enviarDados("/evento/excluir/" + formulario.id.value);
        });

    document
        .getElementById("btnAtualizar")
        .addEventListener("click", function () {
            enviarDados("/evento/atualizar/" + formulario.id.value);
        });

    function enviarDados(url) {
        const dados = new FormData(formulario);
        const novaURL = baseURL + url;
        axios
            .post(novaURL, dados)
            .then((resposta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            })
            .catch((error) => {
                if (error.response) {
                    console.log(error.response.data);
                }
            });
    }
});

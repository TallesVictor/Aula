listaAluno();

function listaAluno() {
    $.ajax({
        type: "GET",
        url: 'aluno',
        success: function(data) {
            data = JSON.parse(data);
            let html = '';
            datTable('tableAluno')
            for (let i = 0; i < data.length; i++) {
                html += `<tr>
                            <td>${data[i].nome}</td>
                            <td>${data[i].email}</td>
                            <td>${data[i].situacao}</td>
                        </tr>`;
            }

            $("#bodyAluno").html(html);
        },
        error: function(response) {
            alert("erro")
        }
    });

}
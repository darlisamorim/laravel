// $(document).ready(function(){

//   // jQuery methods go here...
//   alert("Hello! I am an alert box!!");

// });
function deleteRegistroPaginacao( rotaUrl, idRegistro )
{
  alert(rotaUrl);
  alert(idRegistro);

  if (confirm('Realmente quer excluir ?'))
  {
    $.ajax({
      url: rotaUrl,
      method: 'DELETE',
      Headers: {},
      data: {
        id: idRegistro,        
      },
      beforeSend: function ({
        $.blockUI(
          message: 'Carregando ...',
          timeout: 2000,
        )
      })
    }).done(function (data) {
      $.unblockUI();
      console.log(data);
    }).fail(function (data) {      
      $.unblockUI();
      alert('Não foi possível buscar dados.')
    });
  }
}
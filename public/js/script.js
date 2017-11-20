window.del_str=function(c,d)
{

   if (d=='1')
   {
    c.style.display='none';
   }

}


 
var files;
var inps;

$('input[type=file]').change(function(){
    files = this.files;
});


$("#bookForm").submit(function( event ){
    event.stopPropagation(); // Остановка происходящего
    event.preventDefault();  // Полная остановка происходящего
 
    // Создадим данные формы и добавим в них данные файлов из files
 
    var data = new FormData();
    var file_data = this.image.files[0];   
              
    data.append('image', file_data);
    data.append('author',this.author.value);
    data.append('name',this.name.value);
    data.append('publish',this.publish.value);
    data.append('date',this.date.value);
    data.append('action',this.action.value);
    
    
 
    // Отправляем запрос
 
    $.ajax({
        url: '/addbook/',
        type: 'POST',
        data: data,
        cache: false,
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false, // Так jQuery скажет серверу что это строковой запрос
        success: function( respond, textStatus, jqXHR ){
 
 
         alert(respond);
         
        },
        error: function( jqXHR, textStatus, errorThrown ){
            console.log('ОШИБКИ AJAX запроса: ' + textStatus );
        }
    });
 
});
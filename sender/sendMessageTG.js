function send() {
    let chatid = "-564150555";
    let token = "1650784315:AAETrj62ZNUaYJfj5loMKA4DA7KMMlK2eeQ";
    let text = document.getElementById('text').value;
    $.ajax({  
        type: "POST",  
        url: "https://api.telegram.org/bot"+token+"/sendMessage?chat_id="+chatid,
        data: "parse_mode=HTML&text="+encodeURIComponent(text), 
    });
    document.getElementById('text').value = ''
}
document.getElementById("btn").addEventListener("click", send)
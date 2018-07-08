function createRequest(){
    request=false;
    if(window.XMLHttpRequest)
    {
        request=new XMLHttpRequest();
    }
    else if(window.ActiveXObjext)
    {
        try{
            request=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e)
        {
            try{
                request=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){}
        }
    }
    return request;
}

function sendRequest(url,callbackFun){
    request=createRequest();
    if(request==null){
        alert("request created fail");
    }
    
    request.open("get",url,true);
    request.send(null);
    request.onreadystatechange=callbackFun;
}

function upMessboard(){
    if(request.readyState==4){
        if(request.status==200){
            
        }
    }
}
function AfficherTechnologie(id)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Technologie/AfficherTechnologie",
            data:"idTechnologie="+id,
            success:function(data)
     
        {
            alert("erreur sql");
        }
    }
    );
} 
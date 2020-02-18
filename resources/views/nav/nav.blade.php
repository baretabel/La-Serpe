<nav class="nav flex-column bg-danger" style="width: 170px;height:100%;margin: 0px !important;">
  <ul>
    <li  style="  margin-top: 25px;"><a href="/especes">Especes</a></li>
    <li style="  margin-top: 25px;"><a href="/articles" >Articles</a></li>
    <li style="  margin-top: 25px;"><a href="/commentaire" >Commentaires</a></li>
    @if(Auth::user()->role_id==3)
    <li style="  margin-top: 25px;"><a href="/user"style="  margin-top: 25px;">Utilisateurs</a></li>
    @endif
</ul>
</nav>
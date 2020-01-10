<nav class="nav flex-column bg-danger" style="width: 170px;height:100%;margin: 0px !important;">
  <ul>
    <li><a href="/especes">Especes</a></li>
    <li><a href="/articles">Articles</a></li>
    <li><a href="/commentaire">Commentaires</a></li>
    @if(Auth::user()->role_id==3)
    <li><a href="/user">Utilisateurs</a></li>
    @endif
</ul>
</nav>
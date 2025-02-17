
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Chercher livreur ') }} 
    </h2>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="content">
            @if(Route::is('chercher.livreur.nom'))
                <h2>Entrer le nom du livreur</h2> <br></br>
                <form action=" {{route('afficher.livreur.chercherNom')}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="nom" placeholder="nom"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif

            @if(Route::is('chercher.livreur.prenom'))    
                <h2>Entrer le prenom du livreur</h2> <br></br>
                <form action=" {{route('afficher.livreur.chercherPrenom')}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="prénom" placeholder="prénom"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif

            @if(Route::is('chercher.livreur.email'))
                <h2>Entrer l'e_mail du livreur</h2><br></br>
                <form action=" {{route('afficher.livreur.chercherEmail')}} " method="get">
                    {{ csrf_field() }}
                        <input type="email" name="mail" placeholder="email"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif 

            @if(Route::is('chercher.livreur.numero'))   
                <h2>Entrer le numero du livreur</h2> <br></br>
                <form action=" {{route('afficher.livreur.chercherNum')}} " method="get">
                    {{ csrf_field() }}
                        <input type="text" name="num" placeholder="numero"> <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif 

            @if(Route::is('chercher.livreur.zone')) 
            <h2>Entrer la zone</h2> <br></br>
                <form action=" {{route('afficher.livreur.chercherZone')}} " method="get">
                    {{ csrf_field() }}
                        <select name="zone" placeholder="zone" > 
                            <option > bab_zouar </option>
                            <option > oued_smar </option>
                        </select>
                        <br></br>
                        <input type="submit" value="chercher">
                </form>
            @endif  
   
        </div>
        </div>
    </div>
</div>

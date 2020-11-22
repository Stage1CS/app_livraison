        {{ __('Ajouter livreur') }}

<script src="/js/app.js"></script>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="content">
            <h1>Ajouter un nouveau Livreur</h1>
            <form action=" {{ route('ajouter.livreur') }} " method="post">
                {{ csrf_field() }}
                <input type="text" name="nom" placeholder="nom"> <br></br>
                <input type="text" name="prénom" placeholder="prenom"> <br></br>
                <input type="email" name="email" placeholder="email" id="email"> <br></br>
                <input type="number" name="num" placeholder="numero"> <br></br>
                <select name="zone" id="zone"> 
                    <option >bab_zouar</option>
                    <option >oued_smar</option>
                </select> <br></br>
                <input type="submit" value="inscrire">
            </form>
        </div>
        </div>
    </div>
</div>



            


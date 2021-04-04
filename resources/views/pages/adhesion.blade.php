<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adhesion
        </h2>
    </x-slot>

    <div class="container">

        <div class="row mt-10">

            <div class="col-lg-3">
                <img src="{{ asset('img/thumb/eshiba.png') }}" alt="" class="w-100 mt-4">
            </div>

            <div class="col-lg-9">
                <div class="row bg-white h-100">
                    <div class="col-lg-12">
                        <h1 class=" font-bold bg-blue-300 mt-4 p-3 text-white">Formulaire d'Adhésion</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <form action="" class="col-lg-12">
                                @csrf

                                <div class="row">
                                    <div class="form-gourp col-6 mt-2">
                                        <label>Nom</label>
                                        <input type="text" name="name" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Postnom</label>
                                        <input type="text" name="lastname" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Sexe</label>
                                        <select type="text" name="sex" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                            <option value="home">homme</option>
                                            <option value="femme">femme</option>
                                        </select>
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Date de naissance</label>
                                        <input type="date" name=" birthday" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Etat civile</label>
                                        <select type="text" name="etat" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                            <option value="celibataire">Celibataire</option>
                                            <option value="marie">Marie</option>
                                            <option value="dicvorce">Divorcer</option>
                                            <option value="veuf">Veuf</option>
                                        </select>
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Niveau d'etude</label>
                                        <select type="text" name="level" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                            <option value="primaire">primaire</option>
                                            <option value="humanite">humanite</option>
                                            <option value="gradue">gradue</option>
                                            <option value="license">license</option>
                                        </select>
                                    </div>

                                    <div class="form-gourp col-6 mt-2">
                                        <label>Adresse</label>
                                        <input type="text" name=" location" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                                    </div>

                                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-400 text-white w-100 rounded-0">Envoyer le formulaire</button>

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</x-public-layout>

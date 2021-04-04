<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact
        </h2>
    </x-slot>

    <div class="container">
        <div class="row mt-20">
            <div class="col-lg-5">
                <div class="card border-0 p-4">
                    <div class="card-content white-text ">
                        <span class="card-title"></span>
                        <p>Devenir membre effectif, membre d'honnaire,
                        membre fictif et actif en soutenant nos actions
                        pour Sensibiliser, Identifier, Selectionner et former
                        les genres féminins et autres pour développer leurs communautés.
                        Financement de projet, Assistance sociale, Accompagnement logistique</p>
                    </div>
                    <div class="card-setting mt-3 mb-2">
                        <div class="phone col-12 mb-2">
                            <div class="fas fa-phone-alt"></div>
                            +243 82 206 225 6
                        </div>

                        <div class="phone col-12 mb-2">
                            <div class="fas fa-envelope"></div>
                            contact@fondation-libota.org
                        </div>

                        <div class="phone col-12 mb-3">
                            <div class="fas fa-map-marker-alt"></div>
                            contact@fondation-libota.org
                        </div>
                    </div>
                </div>
            </div>

            <form action="" class="col-lg-7">
                @csrf

                <div class="row">
                    <div class="form-gourp col-12 mt-2">
                        <label>Nom complet</label>
                        <input type="text" name="name" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                    </div>

                    <div class="form-gourp col-12 mt-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control border-0 bg-gray-200 rounded-full mb-2">
                    </div>

                    <div class="form-gourp col-12 mt-2">
                        <label>Message</label>
                        <textarea class="form-control border-0 bg-gray-200 mb-2 "></textarea>


                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-400 text-white w-1/2 rounded-full">Envoyer le formulaire</button>

                    </div>

                </div>

            </form>
        </div>
    </div>

</x-public-layout>

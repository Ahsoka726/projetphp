<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Paramètre</h3>
                        
                        <form class="requires-validation" method="POST">
        <!-- un menu deroulant avec light mode and dark mode /  radio choix nmbr article 6/9/12 choix des sujets min-5 checkbox en haut  -->
                            <div class="col-md-12 ">
                               
                                <label for="colors">Selectionnez votre affichage</label>
                               <select name="colors" id="colors">
                                
                                    <option>Light</option>
                                    <option>Dark</option>
                                    
                                </select>
                               
                            </div>
                            <br>
                            <div class="col-md-12">
                            <label for="article">Selectionnez le nombre d'article</label>
                            <br>
                            <input type="radio" name="article" id="article6" value="1"/>
                            <label for="article">6</label>

                            <input type="radio" name="article" id="article9" value="2"/>
                            <label for="article">9</label>

                            <input type="radio" name="article" id="article12" value="3"/>
                            <label for="article">12</label>
                            <p class="form-text text-muted"><?= $error['article'] ?? '' ?></p>
                            
                            
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="heading">Selectionnez la rubrique de votre choix</label>
                                <br>
                                <div>
                                    <input type="checkbox" id="gaming" name="heading[]" value="gaming">
                                    <label for="gaming">Gaming</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="sport" name="heading[]" value="sport">
                                    <label for="sport">Sport</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="tech" name="heading[]" value="tech">
                                    <label for="tech">Technologie</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="news" name="heading[]" value="news">
                                    <label for="news">Actualités</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="music" name="heading[]" value="music"> 
                                    <label for="musique">Musique</label>
                                    <p class="form-text text-muted"><?= $error['heading'] ?? '' ?></p
                                    
                                </div>  
                            </div>
                            
                           

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Validé</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

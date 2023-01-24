<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Formulaire</h3>
                        
                        <form class="requires-validation">
        <!-- un menu deroulant avec light mode and dark mode /  radio choix nmbr article 6/9/12 choix des sujets min-5 checkbox en haut  -->
                            <div class="col-md-12 ">
                               
                                <label for="choiceMode">Selectionnez votre affichage</label>
                               <select name="selection" id="choiceMode">
                                
                                    <option>light mode</option>
                                    <option>Dark mode</option>
                                    
                                </select>
                               
                            </div>
                            <br>
                            <div class="col-md-12">
                            <label for="articleChoice">Selectionnez le nombre d'article</label>
                            <br>
                            <input type="radio" name="article" id="article6" value="0"/>
                            <label for="article">6</label>

                            <input type="radio" name="article" id="article9" value="1"/>
                            <label for="article">9</label>

                            <input type="radio" name="article" id="article12" value="2"/>
                            <label for="article">12</label>
                            <p class="form-text text-muted"><?= $error['article'] ?? '' ?></p>
                            
                            
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="headingChoice">Selectionnez la rubrique de votre choix</label>
                                <div>
                                    <input type="checkbox" id="gaming" name="heading[]" value="0">
                                    <label for="gaming">Gaming</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="sport" name="heading[]" value="1">
                                    <label for="sport">Sport</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="tech" name="heading[]" value="2">
                                    <label for="tech">Technologie</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="news" name="heading[]" value="3">
                                    <label for="news">Actualités</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="music" name="heading[]" value="4"> 
                                    <label for="musique">Musique</label>
                                    <p class="form-text text-muted"><?= $error['heading[]'] ?? '' ?></p
                                    
                                </div>  
                            </div>
                            

                           <br>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I confirm that all data are correct</label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
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

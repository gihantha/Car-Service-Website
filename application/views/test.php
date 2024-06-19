<select name="proLanguages" id="proLanguages" class="form-control form-control-services" placeholder="Please Enter Service Name">
                                    <?php 
                                        $proLanguages = array("Solidity", "Rust", "Node.js", "Typescript", "Javascript", "C", "C++", "C#", "SQL", "Python", "Assembly Language", "Haskell", "R", ".NET", "Other");

                                    foreach ($proLanguages as $language) : ?>
                                        
                                        <option value="<?php echo htmlspecialchars($language); ?>"><?php echo htmlspecialchars($language); ?></option>
                                    <?php endforeach; ?>
                                </select>
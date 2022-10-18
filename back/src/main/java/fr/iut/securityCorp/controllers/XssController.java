package fr.iut.securityCorp.controllers;

import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/xss")
@CrossOrigin
public class XssController {
    
    @PostMapping(value = "/faille/{recherche}")
    public String rechercheAvecFaille(@PathVariable String recherche) {
        return "Pas de résultat pour" + recherche ;
    }
}

Feature: Basket
    Permet de vérifier le papier fonctionne
    
    Scenario: An empty basket 
    Given An empty basket
    Then The basket price is 0 $

    Scenario: Multiple product are added to the basket
    Given An empty basket
    And A product costing 5 $ is added to the basket
    And A product costing 55 $ is added to the basket
    Then The basket price is 15 $

  
Feature: Wordpress Gherkin Custom Post Types
  In order to have a common Wordpress BDD framework
  As a Wordpress plugin
  I should be able to create CPTs related to the gherkin language
  
Scenario: The plugin is activated
  Given the plugin is installed
  When the plguin is activated
  Then the CPTs "pickles" are created
  And the various pickle types are created

Scenario: the various pickle types are created

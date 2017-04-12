Feature: View traffic laws
			In order to view list traffic laws
			As a user
			I want to view traffic laws

			Scenario: View traffic laws
				Given I'm in the Home page
				When I click on "Quy tắc giao thông" on a "Luật giao thông" list
				Then I should see a list of trafic laws in the page
				When I click on "Cẩm nang an toàn giao thông" on a "Luật giao thông" list
				Then I should see a list of guide to traffic safety in the page

Feature: View traffic signs
			In order to view list traffic signs
			As a user 
			I want to view traffic signs

			Scenario: View traffic signs
				Given I'm in the Home page
				Then I should see a list of traffic signs types

Feature: View trial test
			In order to view list of trial test
			As a user 
			I want to do the trial test

			Scenario: View trial test list
				Given I'm in the Home page
				Then  I should see a list of trial test and guide

			Scenario: Do trial test
				Given I'm in the Trial Test page
				When I select "Thi đề ngẫu nhiên"
				Then I should make random 1 of 30 trial test
				When I select "Thi theo bộ đề"
				Then I should make 1 of 30 trial test which I select

			Scenario: View the guide to test
				Given I'm in the Trial Test page
				Then  should see a list of guide to test

Feature: Login account
    		In order to simplify the procedure of order
    		As a customer
    		I want to use my old info

		   Scenario: Register an account
		        Given I don't have any account
		        And I want to create an account
		        Then I should be able to create my own account

		    Scenario: Login
		        Given I have an account
		        And I want to reuse my info
		        Then I should be able to login

		    Scenario: Forgot password
		        Given I already have an account
		        But I forgot my password
		        Then I should be able to restore my account

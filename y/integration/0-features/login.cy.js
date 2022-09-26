/// <reference types="cypress" />

describe('Login Page', () => {
    it('Does not do much!', () => {
      cy.visit('http://localhost:8000/login')
      cy.get('#typeEmailX-2')
      cy.get('#typePasswordX-2')
      cy.get('.btn')
      cy.get('input[name="email"]').type('admin@gmail.com')
      cy.get('input[name="password"]').type('admin')
      cy.get('button[type="submit"]').click()
      cy.get('.nav-item > .dropdown-menu > form > .dropdown-item')
      expect(true).to.equal(true)
    })
  })
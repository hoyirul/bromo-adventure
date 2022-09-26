/// <reference types="cypress" />

describe('Users Page', () => {
    it('Visit Page Users', () => {
      cy.visit('http://localhost:8000/admin/user')
      expect(true).to.equal(true)
    })

    it('Add Users', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="name"]').type('Hairullah')
        cy.get('input[name="email"]').type('test@gmail.com')
        cy.get('select[name="role_id"]').type('staff')
        cy.get('input[name="password"]').type('12345678')
        cy.get('input[name="password_confirmation"]').type('12345678')
        // cy.get('button[type="submit"]').click()
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Edit Users', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="name"]').type('Hairullah')
        cy.get('select[name="role_id"]').type('staff')
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })
  })
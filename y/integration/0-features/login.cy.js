/// <reference types="cypress" />

describe("Landing page and login to crud", () => {
  it("Visit to Login Page", () => {
    cy.visit("/");
    cy.get('[data-id="btnToLogin"]').click()
  });

  it("Login Page", () => {
      cy.visit("/login");
      cy.get('[data-id="title"]').should("have.text", "Sign in");
      cy.get('[data-id="lblEmail"]').should("have.text", "Email");
      cy.get('[data-id="lblPassword"]').should("have.text", "Password");
      cy.get('[data-id="btnLogin"]').contains("Login").and("be.enabled");
  });

  it("Login required", () => {
    cy.visit("/login");
    cy.get('[data-id="title"]').should("have.text", "Sign in");
    cy.get('[data-id="lblEmail"]').should("have.text", "Email");
    cy.get('[data-id="lblPassword').should("have.text", "Password");
    cy.get('[data-id="btnLogin"]').contains("Login").and("be.enabled");

    cy.get(".btn").click();
    cy.get(".invalid-feedback").contains("The email field is required.");
    cy.get(".invalid-feedback").contains("The password field is required.");
  });

  it("User Cannot Login to dashboard", () => {
    cy.visit("/login");
    cy.get('[data-id="title"]').should("have.text", "Sign in");
    cy.get('[data-id="lblEmail"]').should("have.text", "Email");
    cy.get('[data-id="lblPassword').should("have.text", "Password");
    cy.get('[data-id="btnLogin"]').contains("Login").and("be.enabled");

    cy.get('[data-id="inputEmail"]').type("asxd@example.com");
    cy.get('[data-id="inputPassword"]').type("password");
    cy.get('[data-id="btnLogin"]').click();
    cy.get(".invalid-feedback").contains(
        "These credentials do not match our records."
    );
  });

  it("User can login to application", () => {
      cy.visit("/login");
      cy.get('[data-id="title"]').should("have.text", "Sign in");
      cy.get('[data-id="lblEmail"]').should("have.text", "Email");
      cy.get('[data-id="lblPassword').should("have.text", "Password");
      cy.get('[data-id="btnLogin"]').contains("Login").and("be.enabled");

      cy.get('[data-id="inputEmail"]').type("admin@gmail.com");
      cy.get('[data-id="inputPassword"]').type("admin");
      cy.get('[data-id="btnLogin"]').click();

      cy.get('[data-id="avatar"]').click();
      cy.get('[data-id="btnLogout"]').click();
  });
});
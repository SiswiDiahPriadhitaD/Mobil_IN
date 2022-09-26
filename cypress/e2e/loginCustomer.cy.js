describe('empty spec', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get('.me-1 > .btn').click()
    cy.get('#form2Example18').type('faiza@gmail.com')
    cy.get('#form2Example28').type('faizakurnia')
    cy.get('.btn').click()
    cy.get('.me-1 > .btn').click()
    cy.get(':nth-child(1) > .card > .card-body > form > :nth-child(4) > #name').type('Kurnia Faiza')
    cy.get('#phone').type('08786177261')
    cy.get(':nth-child(6) > #address').type('Malang')
    cy.get(':nth-child(1) > .card > .card-body > form > .btn').click()
    cy.get(':nth-child(1) > .nav-link').click()

  })
})
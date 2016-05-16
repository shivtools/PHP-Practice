SELECT name, state, city FROM customers WHERE state ='CA' AND city='Hollywood' -- must satisfy both tests to pass

SELECT name, state, city FROM customers WHERE city='Boston' OR state='CA'

SELECT id, name, city FROM customers WHERE id=1 OR id=2 AND city='Raleigh' -- id 1 or someone with id 2 and who lives in Raleigh

SELECT id, name, city FROM customers WHERE (id=1 OR id=2) AND city='Raleigh' -- someone with id 1 or id 2 and who lives in Raleigh

-------------------------------------


SELECT name, state FROM customers WHERE state='CA' OR state='NC' OR state='NY' -- query is too long!

SELECT name, state FROM customers WHERE state IN ('CA', 'NY', 'NC') ORDER BY state

SELECT name, state FROM customers WHERE state NOT IN ('CA', 'NY', 'NC') ORDER BY state -- exclude all states except the ones NOT IN ...

------------------------------------

-- How search engines work

SELECT name FROM items WHERE name LIKE 'new%' -- % is wild card (means anything after 'new')

SELECT name FROM items WHERE name LIKE '%computer%' -- picks up keywoard 'computer' irrespective of whats before or after

SELECT city FROM items WHERE city LIKE 'h%d' -- city starts with h and ends with d 

SELECT name FROM items WHERE name LIKE '_ of frogs' --get a single character

---------------------------------------
--Regular expressions

SELECT name FROM items WHERE name REGEXP 'names' -- search for anything that contains the word new
SELECT name FROM items WHERE name REGEXP '.boxes' -- allows for characters before boxes
SELECT name FROM items WHERE name REGEXP 'gold|car' -- search for anything that contains gold or car

-- Set 

SELECT name FROM items WHERE name REGEXP '[^12345] boxes of frogs' --search for 1 boxes, 2 boxes .. 5 boxes of frogs
SELECT name FROM items WHERE name REGEXP '[1-5] boxes of frogs' 

------------------------------------------
-- CREATE CUSTOM COLUMNS

SELECT CONCAT(city, ',', state) AS new_address FROM customers -- give concatenated column a new address
SELECT name, cost, cost-1 AS sale_price FROM items -- cost-1 is sale price

------------------------------------------
-- FUNCTIONS 

SELECT name, UPPER(name) FROM customers -- uppercase for names
SELECT AVG(cost) FROM items 
SELECT SUM(bids) FROM items

-- Aggregate functions

SELECT COUNT(name) FROM items WHERE seller_id=6 --count all rows in table
SELECT COUNT(*) AS item_count, MAX(cost) as max, AVG(cost) AS avg FROM items where seller_id=12

------------------------------------------
--GROUP BY 

SELECT seller_id, COUNT(*) AS item_count FROM items GROUP BY seller_id HAVING COUNT(*) >=3 ORDER BY item_count DESC-- group all seller_ids with their counts, and filter those with count >=3
-- HAVING is for groups 
-- WHERE is for basic tests
------------------------------------------

-- SUBQUERY 

SELECT name, cost FROM items WHERE cost>(
SELECT AVG(cost) FROM items
) ORDER BY cost DESC

------------------------------------------

-- INNER JOINS
SELECT customers.id, customers.name, items.name, items.cost FROM customers, items
WHERE customers.id=seller_id 
ORDER BY customers.id

------------------------------------------

-- Nicknames

SELECT i.seller_id, i.name, c.id
FROM customers AS c, items AS i
WHERE i.seller_id=c.id

------------------------------------------
-- OUTER JOIN

--Show all customers with items even if they do not have any corresponding items
SELECT customers.name, items.name FROM customers LEFT OUTER JOIN items ON customers.id=seller_id
-- include all customers (since its the left entry selected), no matter what
------------------------------------------

--UNION
-- column name must be same 

SELECT name, cost, bids FROM items WHERE info>100
UNION
SELECT name, cost, bids FROM items WHERE cost>1000

------------------------------------------
-- FULL TEXT SEARCHING 
 
 ALTER TABLE items ADD FULLTEXT(name)

--Full text search, include all words with baby, take out all terms with coat
 SELECT name, cost FROM items WHERE Match(name) Against ("+baby -coat" IN BOOLEAN MODE) 
------------------------------------------

INSERT INTO items VALUES("101", "Bacon", "9.95", "1", "0")


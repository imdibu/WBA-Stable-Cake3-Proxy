ALTER TABLE [dbo].[coats_bulk_order_lines]
ADD unique_hash nvarchar(64)
Go

DECLARE @id INT 
SET @id = 0 
UPDATE [dbo].[coats_bulk_order_lines] SET unique_hash = STR(@id), @id = @id + 1 
GO 

ALTER TABLE [dbo].[coats_bulk_order_lines] ADD UNIQUE (unique_hash)
Go

/*** UPDATE INSERT TRIGGER ***/
GO
/****** Object:  Trigger [dbo].[InsteadOfInsertOn_coats_bulk_order_lines]    Script Date: 22.06.2016 22:29:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER TRIGGER [dbo].[InsteadOfInsertOn_coats_bulk_order_lines]
   ON [dbo].[coats_bulk_order_lines]
    INSTEAD OF INSERT
      AS
         BEGIN

            SET  NOCOUNT  ON

            SET  XACT_ABORT  ON

			SET IDENTITY_INSERT dbo.[coats_bulk_order_lines] OFF

            /* column variables declaration*/
            DECLARE

      @article Nvarchar(45),
      @sales_org_id bigint,
      @article_id bigint,
               @new$id int,
               @new$order_id int,
               @new$line_no int,
               @new$customer_material_no nvarchar(100),
               @new$article_id bigint,
               @new$brand_id bigint,
               @new$ticket_id bigint,
               @new$length_id bigint,
               @new$finish_id bigint,
               @new$shade_id bigint,
               @new$coats_material_no nvarchar(45),
               @new$ordered_quantity bigint,
               @new$adjusted_quantity bigint,
               @new$produced_quantity bigint,
               @new$so_line_number bigint,
               @new$shipment_date date,
               @new$shipment_number nvarchar(45),
               @new$unit_of_measure nvarchar(40),
               @new$price nvarchar(45),
               @new$message nvarchar(max),
               @new$required_date date,
               @new$estimated_delivery_date date,
               @new$estimated_delivery_quantity bigint,
               @new$delivery_mode_id tinyint,
               @new$courier_company_name nvarchar(110),
               @new$courier_reference_number nvarchar(45),
               @new$courier_dispatch_date datetime2(0),
               @new$courier_delivery_date datetime2(0),
               @new$status_id smallint,
               @new$updated datetime2(0),
               @new$updated_user_id int,
               @new$prod_style_no nvarchar(30),
               @new$otherinfo nvarchar(30),
               @new$adj_qty_changed nvarchar(5),
			   @new$line_net_weight float,
			   @new$line_gross_weight float,
			   @new$carton_no nvarchar(50),
			   @new$quantity_carton int ,
			   @new$shade_comments nvarchar(200),
			   @new$customer_price float,
			   @new$contract nvarchar(50),
			   @new$line_reference nvarchar(30),
			   @new$contract_customer_po nvarchar(50),
			   @new$unique_hash nvarchar(64)



            DECLARE
                ForEachInsertedRowTriggerCursor CURSOR LOCAL FORWARD_ONLY READ_ONLY FOR
                  SELECT
                     id,
                     order_id,
                     line_no,
                     customer_material_no,
                     article_id,
                     brand_id,
                     ticket_id,
                     length_id,
                     finish_id,
                     shade_id,
                     coats_material_no,
                     ordered_quantity,
                     adjusted_quantity,
                     produced_quantity,
                     so_line_number,
                     shipment_date,
                     shipment_number,
                     unit_of_measure,
                     price,
                     message,
                     required_date,
                     estimated_delivery_date,
                     estimated_delivery_quantity,
                     delivery_mode_id,
                     courier_company_name,
                     courier_reference_number,
                     courier_dispatch_date,
                     courier_delivery_date,
                     status_id,
                     updated,
                     updated_user_id,
                     prod_style_no,
                     otherinfo,
                     adj_qty_changed,
					 line_net_weight,
					 line_gross_weight,
					 carton_no,
					 quantity_carton,
					 shade_comments,
					 customer_price,
					 contract,
					 line_reference,
					 contract_customer_po,
					 unique_hash

                  FROM inserted

            OPEN ForEachInsertedRowTriggerCursor

            FETCH ForEachInsertedRowTriggerCursor
                INTO
                  @new$id,
                  @new$order_id,
                  @new$line_no,
                  @new$customer_material_no,
                  @new$article_id,
                  @new$brand_id,
                  @new$ticket_id,
                  @new$length_id,
                  @new$finish_id,
                  @new$shade_id,
                  @new$coats_material_no,
                  @new$ordered_quantity,
                  @new$adjusted_quantity,
                  @new$produced_quantity,
                  @new$so_line_number,
                  @new$shipment_date,
                  @new$shipment_number,
                  @new$unit_of_measure,
                  @new$price,
                  @new$message,
                  @new$required_date,
                  @new$estimated_delivery_date,
                  @new$estimated_delivery_quantity,
                  @new$delivery_mode_id,
                  @new$courier_company_name,
                  @new$courier_reference_number,
                  @new$courier_dispatch_date,
                  @new$courier_delivery_date,
                  @new$status_id,
                  @new$updated,
                  @new$updated_user_id,
                  @new$prod_style_no,
                  @new$otherinfo,
                  @new$adj_qty_changed,
				  @new$line_net_weight,
				  @new$line_gross_weight,
				  @new$carton_no,
				  @new$quantity_carton,
				  @new$shade_comments,
				  @new$customer_price,
				  @new$contract,
				  @new$line_reference,
				  @new$contract_customer_po,
				  @new$unique_hash



            WHILE @@fetch_status = 0

               BEGIN

                  BEGIN
/*
	  IF @new$article_id IS NOT NULL AND @new$article_id <> 0
	  begin
		SELECT @article=article from coats_sales_org_materials where id=@new$article_id
	End



       IF (@new$article_id IS NULL or @new$article_id='')
      BEGIN
       SELECT @sales_org_id = coats_bulk_orders.sales_org_id
       FROM dbo.coats_bulk_orders
       WHERE coats_bulk_orders.id = @new$order_id

       SELECT @new$article_id= id,@article= article
          FROM dbo.coats_sales_org_materials
                            WHERE
                              coats_sales_org_materials.sales_org_id = @sales_org_id AND
                              coats_sales_org_materials.bulk_sample_id IN ( 2, 3 ) AND
                              coats_sales_org_materials.brand_id = @new$brand_id AND
                              coats_sales_org_materials.ticket_id = @new$ticket_id AND
                              coats_sales_org_materials.length_id = @new$length_id AND
                              coats_sales_org_materials.finish_id = @new$finish_id
                              ORDER BY coats_sales_org_materials.is_default DESC



      END*/


	   IF @new$article_id IS NOT NULL and @new$article_id <> 0


						 SELECT TOP (1) @article=coats_sales_org_materials.article
                        FROM dbo.coats_sales_org_materials
                        WHERE coats_sales_org_materials.id = @new$article_id



                     ELSE
                        BEGIN

						 declare @sales_org_id1 bigint


                           SELECT  @sales_org_id=coats_bulk_orders.sales_org_id
                           FROM dbo.coats_bulk_orders
                           WHERE coats_bulk_orders.id = @new$order_id




                           SELECT @new$article_id=ISNULL(coats_sales_org_materials.id, NULL),
						   @article=ISNULL(coats_sales_org_materials.article, N'')
                           FROM dbo.coats_sales_org_materials
                           WHERE
                              coats_sales_org_materials.sales_org_id = @sales_org_id AND
                              coats_sales_org_materials.bulk_sample_id IN ( 2, 3 ) AND
                              coats_sales_org_materials.brand_id = @new$brand_id AND
                              coats_sales_org_materials.ticket_id = @new$ticket_id AND
                               coats_sales_org_materials.length_id = @new$length_id AND
                              coats_sales_org_materials.finish_id = @new$finish_id
                              ORDER BY coats_sales_org_materials.is_default DESC
							--  SELECT @new$article_id,@sales_org_id,@new$brand_id,@new$ticket_id,@new$length_id,@new$finish_id


                        END



                  END
                   INSERT dbo.coats_bulk_order_lines(
                     order_id,
                     line_no,
                     customer_material_no,
                     article_id,
                     brand_id,
                     ticket_id,
                     length_id,
                     finish_id,
                     shade_id,
                     coats_material_no,
                     ordered_quantity,
                     adjusted_quantity,
                     produced_quantity,
                     so_line_number,
                     shipment_date,
                     shipment_number,
                     unit_of_measure,
                     price,
                     message,
                     required_date,
                     estimated_delivery_date,
                     estimated_delivery_quantity,
                     delivery_mode_id,
                     courier_company_name,
                     courier_reference_number,
                     courier_dispatch_date,
                     courier_delivery_date,
                     status_id,
                     updated,
                     updated_user_id,
                     prod_style_no,
                     otherinfo,
                     adj_qty_changed,
					 line_net_weight,
					 line_gross_weight,
					 carton_no,
					 quantity_carton,
					 shade_comments,
					 customer_price,
					 contract,
					 line_reference,
					 contract_customer_po,
					 unique_hash)
                     VALUES (
                        @new$order_id,
                        @new$line_no,
                        @new$customer_material_no,
                        @new$article_id,
                        @new$brand_id,
                        @new$ticket_id,
                        @new$length_id,
                        @new$finish_id,
                        @new$shade_id,
                        @new$coats_material_no,
                        @new$ordered_quantity,
                        @new$adjusted_quantity,
                        @new$produced_quantity,
                        @new$so_line_number,
                        @new$shipment_date,
                        @new$shipment_number,
                        @new$unit_of_measure,
                        @new$price,
                        @new$message,
                        @new$required_date,
                        @new$estimated_delivery_date,
                        @new$estimated_delivery_quantity,
                        @new$delivery_mode_id,
                        @new$courier_company_name,
                        @new$courier_reference_number,
                        @new$courier_dispatch_date,
                        @new$courier_delivery_date,
                        @new$status_id,
                        @new$updated,
                        @new$updated_user_id,
                        @new$prod_style_no,
                        @new$otherinfo,
                        @new$adj_qty_changed,
						@new$line_net_weight,
						@new$line_gross_weight,
						@new$carton_no,
						@new$quantity_carton,
						@new$shade_comments,
						@new$customer_price,
						@new$contract,
				                @new$line_reference,
						@new$contract_customer_po,
						@new$unique_hash)

                  FETCH ForEachInsertedRowTriggerCursor
                      INTO
                        @new$id,
                        @new$order_id,
                        @new$line_no,
                        @new$customer_material_no,
                        @new$article_id,
                        @new$brand_id,
                        @new$ticket_id,
                        @new$length_id,
                        @new$finish_id,
                        @new$shade_id,
                        @new$coats_material_no,
                        @new$ordered_quantity,
                        @new$adjusted_quantity,
						@new$produced_quantity,
                        @new$so_line_number,
                        @new$shipment_date,
                        @new$shipment_number,
                        @new$unit_of_measure,
                        @new$price,
                        @new$message,
                        @new$required_date,
                        @new$estimated_delivery_date,
                        @new$estimated_delivery_quantity,
                        @new$delivery_mode_id,
                        @new$courier_company_name,
                        @new$courier_reference_number,
                        @new$courier_dispatch_date,
                        @new$courier_delivery_date,
                        @new$status_id,
                        @new$updated,
                        @new$updated_user_id,
                        @new$prod_style_no,
                        @new$otherinfo,
                        @new$adj_qty_changed,
						@new$line_net_weight,
						@new$line_gross_weight,
						@new$carton_no,
						@new$quantity_carton,
						@new$shade_comments,
						@new$customer_price,
						@new$contract,
				                @new$line_reference,
						@new$contract_customer_po,
						@new$unique_hash


               END

            CLOSE ForEachInsertedRowTriggerCursor

            DEALLOCATE ForEachInsertedRowTriggerCursor


	/*		Select Count(*) as ids,order_id  into #temp from coats_bulk_order_lines
			Where order_id=@new$order_id
			Group by order_id

		Update x set x.order_line=y.ids
		From coats_bulk_orders x, #temp y
		where x.id=y.order_id */

         END



/****** UPDATE UPDATE TRIGGER *****************/
GO
/****** Object:  Trigger [dbo].[InsteadOfUpdateOn_coats_bulk_order_lines]    Script Date: 22.06.2016 22:32:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER TRIGGER [dbo].[InsteadOfUpdateOn_coats_bulk_order_lines]
   ON [dbo].[coats_bulk_order_lines]
    INSTEAD OF UPDATE
      AS
         BEGIN

            SET  NOCOUNT  ON
			         SET  XACT_ABORT  ON

            /* column variables declaration*/
            DECLARE
               @old$ssma$rowid uniqueidentifier,
               @new$id int,
               @new$order_id int,
               @new$line_no int,
               @new$customer_material_no nvarchar(100),
               @new$article_id bigint,
               @old$article_id bigint,
               @new$brand_id bigint,
               @old$brand_id bigint,
               @new$ticket_id bigint,
               @old$ticket_id bigint,
               @new$length_id bigint,
               @old$length_id bigint,
               @new$finish_id bigint,
               @old$finish_id bigint,
               @new$shade_id bigint,
               @new$coats_material_no nvarchar(45),
               @new$ordered_quantity bigint,
               @new$adjusted_quantity bigint,
               @new$produced_quantity bigint,
               @new$so_line_number bigint,
               @new$shipment_date date,
               @new$shipment_number nvarchar(45),
               @new$unit_of_measure nvarchar(40),
               @new$price nvarchar(45),
               @new$message nvarchar(max),
               @new$required_date date,
               @new$estimated_delivery_date date,
               @new$estimated_delivery_quantity bigint,
               @new$delivery_mode_id tinyint,
               @new$courier_company_name nvarchar(110),
               @new$courier_reference_number nvarchar(45),
               @new$courier_dispatch_date datetime2(0),
               @new$courier_delivery_date datetime2(0),
               @new$status_id smallint,
               @new$updated datetime2(0),
               @new$updated_user_id int,
               @new$prod_style_no nvarchar(30),
               @new$otherinfo nvarchar(30),
               @new$adj_qty_changed nvarchar(5),
			   @new$line_net_weight float,
			   @new$line_gross_weight float,
			   @new$carton_no nvarchar(50),
			   @new$quantity_carton int,
			   @new$shade_comments nvarchar(200),
			   @new$customer_price float,
			   @new$contract nvarchar(50),
			   @new$line_reference nvarchar(30),
			   @new$contract_customer_po nvarchar(50),
			   @new$unique_hash nvarchar(64)


            DECLARE
                ForEachInsertedRowTriggerCursor CURSOR LOCAL FORWARD_ONLY READ_ONLY FOR
                  SELECT
                     i.id,
                     i.order_id,
                     i.line_no,
                     i.customer_material_no,
                     i.article_id,
                     i.brand_id,
                     i.ticket_id,
                     i.length_id,
                     i.finish_id,
                     i.shade_id,
                     i.coats_material_no,
                     i.ordered_quantity,
                     i.adjusted_quantity,
                     i.produced_quantity,
                     i.so_line_number,
                     i.shipment_date,
                     i.shipment_number,
                     i.unit_of_measure,
                     i.price,
                     i.message,
                     i.required_date,
                     i.estimated_delivery_date,
                     i.estimated_delivery_quantity,
                     i.delivery_mode_id,
                     i.courier_company_name,
                     i.courier_reference_number,
                     i.courier_dispatch_date,
                     i.courier_delivery_date,
                     i.status_id,
                     i.updated,
                     i.updated_user_id,
                     i.prod_style_no,
                     i.otherinfo,
                     i.adj_qty_changed,
					 i.line_net_weight,
					 i.line_gross_weight,
					 i.carton_no,
					 i.quantity_carton,
					 i.shade_comments,
					 i.customer_price,
					 i.contract,
					 i.line_reference,
					 i.contract_customer_po,
					 i.unique_hash,

                     d.article_id,
                     d.brand_id,
                     d.ticket_id,
                     d.length_id,
                     d.finish_id,
                     d.ssma$rowid
                  FROM
                     deleted  AS d
                        INNER JOIN inserted  AS i
                        ON i.ssma$rowid = d.ssma$rowid

            OPEN ForEachInsertedRowTriggerCursor

            FETCH ForEachInsertedRowTriggerCursor
                INTO
                  @new$id,
                  @new$order_id,
                  @new$line_no,
                  @new$customer_material_no,
                  @new$article_id,
                  @new$brand_id,
                  @new$ticket_id,
                  @new$length_id,
                  @new$finish_id,
                  @new$shade_id,
                  @new$coats_material_no,
                  @new$ordered_quantity,
                  @new$adjusted_quantity,
                  @new$produced_quantity,
                  @new$so_line_number,
                  @new$shipment_date,
                  @new$shipment_number,
                  @new$unit_of_measure,
                  @new$price,
                  @new$message,
                  @new$required_date,
                  @new$estimated_delivery_date,
                  @new$estimated_delivery_quantity,
                  @new$delivery_mode_id,
                  @new$courier_company_name,
                  @new$courier_reference_number,
                  @new$courier_dispatch_date,
                  @new$courier_delivery_date,
                  @new$status_id,
                  @new$updated,
                  @new$updated_user_id,
                  @new$prod_style_no,
                  @new$otherinfo,
                  @new$adj_qty_changed,
				  @new$line_net_weight,
				  @new$line_gross_weight,
				  @new$carton_no,
				  @new$quantity_carton,
				  @new$shade_comments,
				  @new$customer_price,
				  @new$contract,
				  @new$line_reference,
				  @new$contract_customer_po,
				  @new$unique_hash,

                  @old$article_id,
                  @old$brand_id,
                  @old$ticket_id,
                  @old$length_id,
                  @old$finish_id,
                  @old$ssma$rowid

            WHILE @@fetch_status = 0

               BEGIN

                  /* row-level triggers implementation: begin*/
                  BEGIN
                     IF
                        @new$article_id <> @old$article_id OR
                        @new$brand_id <> @old$brand_id OR
                        @new$ticket_id <> @old$ticket_id OR
                        @new$length_id <> @old$length_id OR
                        @new$finish_id <> @old$finish_id
                        IF @new$article_id IS NOT NULL AND @new$article_id <> 0
                           /*
                           *   SSMA error messages:
                           *   M2SS0084: The INTO clause cannot be converted in the current context.
                           *   INTO @article

                           SELECT coats_sales_org_materials.article
                           FROM dbo.coats_sales_org_materials
                           WHERE coats_sales_org_materials.id = @new$article_id
                           */


                           DECLARE
                              @db_null_statement int
                        ELSE
                           BEGIN

                              /*
                              *   SSMA error messages:
                              *   M2SS0084: The INTO clause cannot be converted in the current context.
                              *   INTO @sales_org_id

                              SELECT coats_bulk_orders.sales_org_id
                              FROM dbo.coats_bulk_orders
                              WHERE coats_bulk_orders.id = @new$order_id
                              */



                       /*
                              *   SSMA error messages:
                              *   M2SS0198: SSMA for MySQL  does not support user variables conversion
                              *   M2SS0084: The INTO clause cannot be converted in the current context.
                              *   INTO @article_id, @article

                              /*
                              *   SSMA warning messages:
                              *   M2SS0219: Converted operator may not work exactly the same as in MySQL
                              */

                              SELECT TOP (1) ISNULL(coats_sales_org_materials.id, NULL), ISNULL(coats_sales_org_materials.article, N'')
                              FROM dbo.coats_sales_org_materials
                              WHERE
                                 coats_sales_org_materials.sales_org_id = [@sales_org_id] AND
                                 coats_sales_org_materials.bulk_sample_id IN ( 2, 3 ) AND
                                 coats_sales_org_materials.brand_id = @new$brand_id AND
                                 coats_sales_org_materials.ticket_id = @new$ticket_id AND
                                 coats_sales_org_materials.length_id = @new$length_id AND
                                 coats_sales_org_materials.finish_id = @new$finish_id
                                 ORDER BY coats_sales_org_materials.is_default DESC
                              */



                              /*
                              *   SSMA error messages:
                              *   M2SS0198: SSMA for MySQL  does not support user variables conversion

                              SET @new$article_id = [@article_id]
                              */



                              DECLARE
                                 @db_null_statement$2 int

                           END
                  END
                  /* row-level triggers implementation: end*/

                  /* DML-operation emulation*/
                  UPDATE dbo.coats_bulk_order_lines
                     SET
                        order_id = @new$order_id,
                        line_no = @new$line_no,
                        customer_material_no = @new$customer_material_no,
                        article_id = @new$article_id,
                        brand_id = @new$brand_id,
                        ticket_id = @new$ticket_id,
                        length_id = @new$length_id,
                        finish_id = @new$finish_id,
                        shade_id = @new$shade_id,
                        coats_material_no = @new$coats_material_no,
                        ordered_quantity = @new$ordered_quantity,
                        adjusted_quantity = @new$adjusted_quantity,
                        produced_quantity = @new$produced_quantity,
                        so_line_number = @new$so_line_number,
                        shipment_date = @new$shipment_date,
                        shipment_number = @new$shipment_number,
                        unit_of_measure = @new$unit_of_measure,
                        price = @new$price,
                        message = @new$message,
                        required_date = @new$required_date,
                        estimated_delivery_date = @new$estimated_delivery_date,
                        estimated_delivery_quantity = @new$estimated_delivery_quantity,
                        delivery_mode_id = @new$delivery_mode_id,
                        courier_company_name = @new$courier_company_name,
                        courier_reference_number = @new$courier_reference_number,
                        courier_dispatch_date = @new$courier_dispatch_date,
                        courier_delivery_date = @new$courier_delivery_date,
                        status_id = @new$status_id,
                        updated = @new$updated,
                        updated_user_id = @new$updated_user_id,
                        prod_style_no = @new$prod_style_no,
                        otherinfo = @new$otherinfo,
                        adj_qty_changed = @new$adj_qty_changed,
						line_net_weight = @new$line_net_weight,
						line_gross_weight = @new$line_gross_weight,
						carton_no = @new$carton_no,
						quantity_carton = @new$quantity_carton,
						shade_comments = @new$shade_comments,
						customer_price = @new$customer_price,
						contract = @new$contract,
				                line_reference = @new$line_reference,
						contract_customer_po = @new$contract_customer_po,
						unique_hash = @new$unique_hash

                  WHERE ssma$rowid = @old$ssma$rowid

                  FETCH ForEachInsertedRowTriggerCursor
                      INTO
                        @new$id,
                        @new$order_id,
                        @new$line_no,
         @new$customer_material_no,
                        @new$article_id,
                        @new$brand_id,
                        @new$ticket_id,
                        @new$length_id,
                        @new$finish_id,
                        @new$shade_id,
                        @new$coats_material_no,
                        @new$ordered_quantity,
                        @new$adjusted_quantity,
                        @new$produced_quantity,
                        @new$so_line_number,
                        @new$shipment_date,
                        @new$shipment_number,
                        @new$unit_of_measure,
                        @new$price,
                        @new$message,
                        @new$required_date,
                        @new$estimated_delivery_date,
                        @new$estimated_delivery_quantity,
                        @new$delivery_mode_id,
                        @new$courier_company_name,
                        @new$courier_reference_number,
                        @new$courier_dispatch_date,
                        @new$courier_delivery_date,
                        @new$status_id,
                        @new$updated,
                        @new$updated_user_id,
                        @new$prod_style_no,
                        @new$otherinfo,
                        @new$adj_qty_changed,
						@new$line_net_weight,
						@new$line_gross_weight,
						@new$carton_no,
						@new$quantity_carton,
						@new$shade_comments,
						@new$customer_price,
						@new$contract,
						@new$line_reference,
						@new$contract_customer_po,
						@new$unique_hash,

                        @old$article_id,
                        @old$brand_id,
                        @old$ticket_id,
                        @old$length_id,
                        @old$finish_id,
                        @old$ssma$rowid

               END

            CLOSE ForEachInsertedRowTriggerCursor

            DEALLOCATE ForEachInsertedRowTriggerCursor

			Select Count(*) as ids,order_id  into #temp from coats_bulk_order_lines
			Where order_id=@new$order_id
			Group by order_id

		Update x set x.order_line=y.ids
		From coats_bulk_orders x, #temp y
		where x.id=y.order_id

         END
